/**
 * Research Paper Verification System
 * Enhanced Signup Module
 */

// Initialize on document load
document.addEventListener('DOMContentLoaded', function() {
    initializeSignupForm();
    setupResponsiveAdjustments();
  });
  
  // Email validation function
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
  
  // Password validation function
  function validatePassword(input) {
    const password = input.value;
    const errorElement = document.getElementById('passwordError');
    const strengthBar = document.getElementById('passwordStrengthBar');
    const strengthText = document.getElementById('passwordStrengthText');
    
    // Reset error message
    errorElement.textContent = '';
    input.setCustomValidity('');
    
    if (password === '') {
      strengthBar.style.width = '0%';
      strengthBar.className = 'progress-bar';
      strengthText.textContent = 'Password strength';
      return;
    }
    
    // Check password strength
    let strength = 0;
    let feedback = [];
    
    // Length check
    if (password.length < 8) {
      feedback.push('Password must be at least 8 characters');
      input.setCustomValidity('Password too short');
    } else {
      strength += 25;
    }
    
    // Uppercase check
    if (!/[A-Z]/.test(password)) {
      feedback.push('Add uppercase letter');
    } else {
      strength += 25;
    }
    
    // Lowercase check
    if (!/[a-z]/.test(password)) {
      feedback.push('Add lowercase letter');
    } else {
      strength += 25;
    }
    
    // Number or special char check
    if (!/[0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password)) {
      feedback.push('Add number or special character');
    } else {
      strength += 25;
    }
    
    // Update strength indicator
    strengthBar.style.width = strength + '%';
    
    // Update color and text based on strength
    if (strength <= 25) {
      strengthBar.className = 'progress-bar bg-danger';
      strengthText.textContent = 'Weak';
    } else if (strength <= 50) {
      strengthBar.className = 'progress-bar bg-warning';
      strengthText.textContent = 'Fair';
    } else if (strength <= 75) {
      strengthBar.className = 'progress-bar bg-info';
      strengthText.textContent = 'Good';
    } else {
      strengthBar.className = 'progress-bar bg-success';
      strengthText.textContent = 'Strong';
    }
    
    // Display any error messages
    if (feedback.length > 0) {
      errorElement.textContent = feedback.join(', ');
    }
    
    // Also validate confirm password field if it has a value
    if (document.getElementById('confirmPassword').value) {
      validateConfirmPassword();
    }
  }
  
  // Confirm password validation
  function validateConfirmPassword() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorElement = document.getElementById('confirmPasswordError');
    const confirmInput = document.getElementById('confirmPassword');
    
    if (confirmPassword === '') {
      errorElement.textContent = '';
      confirmInput.setCustomValidity('');
      return;
    }
    
    if (password !== confirmPassword) {
      errorElement.textContent = 'Passwords do not match';
      confirmInput.setCustomValidity('Passwords do not match');
    } else {
      errorElement.textContent = '';
      confirmInput.setCustomValidity('');
    }
  }
  
  // Toggle password visibility
  function togglePasswordVisibility(inputId, toggleId) {
    const passwordInput = document.getElementById(inputId);
    const toggleIcon = document.getElementById(toggleId);
    
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleIcon.className = 'fa fa-eye';
    } else {
      passwordInput.type = 'password';
      toggleIcon.className = 'fa fa-eye-slash';
    }
  }
  
  // Initialize signup form with enhanced functionality
  function initializeSignupForm() {
    const signupForm = document.getElementById('signupForm');
    const fullNameInput = document.getElementById('fullName');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    
    // Add polished transitions and focus styles
    const formElements = signupForm.querySelectorAll('input, button');
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
    signupForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Validate form before submission
      if (!validateSignupForm()) {
        return false;
      }
      
      // Show loading state
      const submitButton = signupForm.querySelector('button[type="submit"]');
      const originalButtonText = submitButton.innerHTML;
      submitButton.disabled = true;
      submitButton.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Creating Account...';
      
      // Get selected account type
      const selectedRole = document.querySelector('input[name="accountType"]:checked').value;
      
      // Simulate API call to create account
      setTimeout(() => {
        createAccount({
          fullName: fullNameInput.value,
          email: emailInput.value,
          password: passwordInput.value,
          accountType: selectedRole
        })
          .then(response => {
            // Show success message
            showSuccessMessage('Account created successfully! Redirecting to login...');
            
            // Redirect based on account type after a short delay
            setTimeout(() => {
              if (selectedRole === 'administrator') {
                // Redirect to admin page
                window.location.href = './views/admin/index.php';
              } else if (selectedRole === 'validator') {
                // Redirect to validator page
                window.location.href = './views/validator/index.php';
              } else {
                // Fallback to login page
                window.location.href = './index.html';
              }
            }, 2000);
          })
          .catch(error => {
            // Show error message
            const errorMessage = error.message || 'Failed to create account. Please try again.';
            showSignupError(errorMessage);
            
            // Reset button state
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
          });
      }, 1500); // Simulate network delay
    });
  }
  
  // Comprehensive form validation
  function validateSignupForm() {
    const fullNameInput = document.getElementById('fullName');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    let isValid = true;
    
    // Clear previous errors
    document.getElementById('nameError').textContent = '';
    document.getElementById('emailError').textContent = '';
    document.getElementById('passwordError').textContent = '';
    document.getElementById('confirmPasswordError').textContent = '';
    
    // Validate full name
    if (!fullNameInput.value.trim()) {
      document.getElementById('nameError').textContent = 'Full name is required';
      isValid = false;
    }
    
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
    } else if (passwordInput.value.length < 8) {
      document.getElementById('passwordError').textContent = 'Password must be at least 8 characters';
      isValid = false;
    }
    
    // Validate confirm password
    if (!confirmPasswordInput.value) {
      document.getElementById('confirmPasswordError').textContent = 'Please confirm your password';
      isValid = false;
    } else if (passwordInput.value !== confirmPasswordInput.value) {
      document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
      isValid = false;
    }
    
    return isValid;
  }
  
  // Display signup error with animation
  function showSignupError(message) {
    const errorContainer = document.createElement('div');
    errorContainer.className = 'alert alert-danger alert-dismissible fade show mt-3';
    errorContainer.role = 'alert';
    errorContainer.innerHTML = `
      <strong>Error!</strong> ${message}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    // Insert error before the form
    const form = document.getElementById('signupForm');
    form.parentNode.insertBefore(errorContainer, form);
    
    // Auto-dismiss after 5 seconds
    setTimeout(() => {
      errorContainer.classList.remove('show');
      setTimeout(() => errorContainer.remove(), 150);
    }, 5000);
  }
  
  // Display success message
  function showSuccessMessage(message) {
    const successContainer = document.createElement('div');
    successContainer.className = 'alert alert-success alert-dismissible fade show mt-3';
    successContainer.role = 'alert';
    successContainer.innerHTML = `
      <strong>Success!</strong> ${message}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    // Insert success message before the form
    const form = document.getElementById('signupForm');
    form.parentNode.insertBefore(successContainer, form);
  }
  
  // Handle responsive adjustments
  function setupResponsiveAdjustments() {
    // Adjust UI based on screen size
    function adjustForScreenSize() {
      const signupCard = document.querySelector('.card');
      const formTitle = document.querySelector('.text-center.mt-4 h1');
      
      if (window.innerWidth < 576) { // Small screens
        signupCard.style.margin = '0';
        signupCard.style.borderRadius = '0';
        formTitle.className = 'h3'; // Smaller heading on small screens
      } else {
        signupCard.style.margin = '';
        signupCard.style.borderRadius = '';
        formTitle.className = 'h2';
      }
    }
    
    // Call immediately and on resize
    adjustForScreenSize();
    window.addEventListener('resize', adjustForScreenSize);
  }
  
  // Mock account creation function - replace with actual API call
  async function createAccount(userData) {
    // This is a placeholder for your actual account creation logic
    return new Promise((resolve, reject) => {
      // Check if email already exists (mock validation)
      if (userData.email === 'test@example.com') {
        reject({ success: false, message: 'Email already in use. Please try a different email address.' });
        return;
      }
      
      // Mock successful account creation
      resolve({ 
        success: true, 
        message: 'Account created successfully',
        userData: { 
          id: 'user_' + Math.random().toString(36).substr(2, 9),
          name: userData.fullName,
          email: userData.email,
          role: userData.accountType
        }
      });
    });
  }