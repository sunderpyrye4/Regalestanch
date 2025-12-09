document.addEventListener('DOMContentLoaded', function() {
  if (!localStorage.getItem('cookiesAccepted')) {
    document.getElementById('cookie-banner').style.display = 'block';
  }
  document.getElementById('accept-cookies').addEventListener('click', function() {
    localStorage.setItem('cookiesAccepted', 'true');
    document.getElementById('cookie-banner').style.display = 'none';
  });
  document.getElementById('close-cookies').addEventListener('click', function() {
    document.getElementById('cookie-banner').style.display = 'none';
  });
});