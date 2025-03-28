/**
 * Research Paper Verification System
 * Enhanced Login Module
 */

// Initialize on document load
document.addEventListener('DOMContentLoaded', function() {
    initializeLoginForm();
    setupResponsiveAdjustments();
    enhanceAccessibility();
  });
  
  // Email validation function (keeping your existing function)
  function validateEmail(input) {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const email = input.value;
    const errorElement = document.getElementById('emailError');
    const previewElement = document.getElementById('emailPreview');
    
    if (email === '') {
      errorElement.textContent = '';
      previewElement.innerHTML = '<small>Format: username@domain.com</small>';
      return;
    }
    
    if (!emailRegex.test(email)) {
      errorElement.textContent = 'Please enter a valid email address.';
      input.setCustomValidity('Invalid email format');
    } else if (email.length > 254) {
      errorElement.textContent = 'Email exceeds maximum length of 254 characters.';
      input.setCustomValidity('Email too long');
    } else {
      errorElement.textContent = '';
      input.setCustomValidity('');
      previewElement.innerHTML = `<small>Email appears valid ✓</small>`;
    }
  }
  
  // Password visibility toggle (keeping your existing function)
  function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePassword');
    
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleIcon.className = 'fa fa-eye';
    } else {
      passwordInput.type = 'password';
      toggleIcon.className = 'fa fa-eye-slash';
    }
  }
  
  // Initialize login form with enhanced functionality
  function initializeLoginForm() {
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const rememberCheckbox = document.getElementById('rememberMe');
    
    // Check for saved email if remember me was checked
    if (localStorage.getItem('rememberMe') === 'true') {
      emailInput.value = localStorage.getItem('userEmail') || '';
      rememberCheckbox.checked = true;
    }
    
    // Add polished transitions and focus styles
    const formElements = loginForm.querySelectorAll('input, button');
    formElements.forEach(element => {
      // Add transition effect on focus
      element.addEventListener('focus', function() {
        this.style.transition = 'all 0.3s ease';
        if (this.classList.contains('form-control')) {
          this.style.boxShadow = '0 0 0 0.2rem rgba(0, 123, 255, 0.25)';
        }
      });
      
      // Remove transition effect on blur
      element.addEventListener('blur', function() {
        if (this.classList.contains('form-control')) {
          this.style.boxShadow = '';
        }
      });
    });
  
    // Handle form submission
    // Replace the existing redirection code in the loginForm submit handler
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate form before submission
        if (!validateForm()) {
        return false;
        }
        
        // Show loading state
        const submitButton = loginForm.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.innerHTML;
        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Authenticating...';
        
        // Remember user email if checkbox is checked
        if (rememberCheckbox.checked) {
        localStorage.setItem('rememberMe', 'true');
        localStorage.setItem('userEmail', emailInput.value);
        } else {
        localStorage.removeItem('rememberMe');
        localStorage.removeItem('userEmail');
        }
        
        // Get selected role
        const selectedRole = document.querySelector('input[name="userRole"]:checked').value;
        
        // Authenticate with role
        setTimeout(() => {
        attemptLogin(emailInput.value, passwordInput.value)
            .then(response => {
            // Redirect based on role
            if (response.userData.role === 'administrator') {
                window.location.href = './views/admin/index.php';
            } else if (response.userData.role === 'validator') {
                window.location.href = './views/validator/index.php';
            } else {
                // Fallback in case role doesn't match expected values
                showLoginError("Unknown user role. Please contact support.");
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;
            }
            })
            .catch(error => {
            // On failure, show error
            const errorMessage = error.message || 'Invalid credentials. Please try again.';
            showLoginError(errorMessage);
            
            // Reset button state
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
            });
        }, 1000); // Simulate network delay
    });
  }
  
  // Comprehensive form validation
  function validateForm() {
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    let isValid = true;
    
    // Clear previous errors
    document.getElementById('emailError').textContent = '';
    document.getElementById('passwordError').textContent = '';
    
    // Validate email
    if (!emailInput.value) {
      document.getElementById('emailError').textContent = 'Email is required';
      isValid = false;
    } else if (!emailInput.validity.valid) {
      document.getElementById('emailError').textContent = 'Please enter a valid email address';
      isValid = false;
    }
    
    // Validate password
    if (!passwordInput.value) {
      document.getElementById('passwordError').textContent = 'Password is required';
      isValid = false;
    }
    
    return isValid;
  }
  
  // Display login error with animation
  function showLoginError(message) {
    const errorContainer = document.createElement('div');
    errorContainer.className = 'alert alert-danger alert-dismissible fade show mt-3';
    errorContainer.role = 'alert';
    errorContainer.innerHTML = `
      <strong>Login Failed!</strong> ${message}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    // Insert error before the form
    const form = document.getElementById('loginForm');
    form.parentNode.insertBefore(errorContainer, form);
    
    // Auto-dismiss after 5 seconds
    setTimeout(() => {
      errorContainer.classList.remove('show');
      setTimeout(() => errorContainer.remove(), 150);
    }, 5000);
  }
  
  // Handle responsive adjustments
  function setupResponsiveAdjustments() {
    // Adjust UI based on screen size
    function adjustForScreenSize() {
      const loginCard = document.querySelector('.card');
      const formTitle = document.querySelector('.text-center.mt-4 h1');
      
      if (window.innerWidth < 576) { // Small screens
        loginCard.style.margin = '0';
        loginCard.style.borderRadius = '0';
        formTitle.className = 'h3'; // Smaller heading on small screens
      } else {
        loginCard.style.margin = '';
        loginCard.style.borderRadius = '';
        formTitle.className = 'h2';
      }
    }
    
    // Call immediately and on resize
    adjustForScreenSize();
    window.addEventListener('resize', adjustForScreenSize);
  }
  
  // Enhance accessibility features
  function enhanceAccessibility() {
    // Add aria attributes
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
      const label = input.closest('.mb-3').querySelector('.form-label');
      if (label) {
        const labelText = label.textContent;
        input.setAttribute('aria-label', labelText);
        
        // Connect labels and inputs
        const uniqueId = input.id || `${input.name}-field`;
        input.id = uniqueId;
        label.htmlFor = uniqueId;
      }
    });
    
    // Add keyboard navigation enhancements
    document.addEventListener('keydown', function(e) {
      // Allow ESC key to clear password field
      if (e.key === 'Escape') {
        const activeElement = document.activeElement;
        if (activeElement && activeElement.id === 'password') {
          activeElement.value = '';
        }
      }
    });
  }
  
  // Mock authentication function - replace with actual API call
// Modify the attemptLogin function to handle different roles
async function attemptLogin(email, password) {
    // Get the selected role
    const selectedRole = document.querySelector('input[name="userRole"]:checked').value;
    
    return new Promise((resolve, reject) => {
      // For demo purposes - in a real app, this would be an API call to your backend
      // that verifies both credentials AND the user's role
      
      // Mock admin credentials
      if (selectedRole === 'administrator' && email === 'admin@example.com' && password === 'password123') {
        resolve({ 
          success: true, 
          userData: { name: 'Administrator', role: 'administrator' } 
        });
      } 
      // Mock validator credentials
      else if (selectedRole === 'validator' && email === 'validator@example.com' && password === 'password123') {
        resolve({ 
          success: true, 
          userData: { name: 'Validator', role: 'validator' } 
        });
      } 
      // Invalid credentials or incorrect role
      else {
        reject({ 
          success: false, 
          message: 'Invalid credentials for the selected role.' 
        });
      }
    });
  }