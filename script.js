// Toggle entre Register y Sign In
document.addEventListener('DOMContentLoaded', () => {
  const boxSignUp   = document.getElementById('signup');
  const boxSignIn   = document.getElementById('signin');
  const btnToSignIn = document.getElementById('switchToSignIn');
  const btnToSignUp = document.getElementById('switchToSignUp');

  // Sign In
  btnToSignIn.addEventListener('click', () => {
    boxSignUp.style.display = 'none';
    boxSignIn.style.display = 'block';
  });

  // Sign Up
  btnToSignUp.addEventListener('click', () => {
    boxSignIn.style.display = 'none';
    boxSignUp.style.display = 'block';
  });
});