document.getElementById('open-registration-form').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'block';
  });
  
  document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
  });
  
  document.getElementById('registration-form').addEventListener('submit', function(event) {
    event.preventDefault();
    // handle form submission
  });