<template>
  <nav class="navbar">
      <ul class="navbar-list">
          <li class="navbar-item"><a href="" class="navbar-link clicked">/home</a></li>
          <li class="navbar-item"><a href="jasminebattestin.com/about" class="navbar-link">/about</a></li>
          <li class="navbar-item"><a href="#" class="navbar-link">/blog</a></li>
          <li class="navbar-item"><a href="#" class="navbar-link">/contact</a></li>
      </ul>
  </nav>
</template>
  
<script>
  export default {
    name: 'Navbar'
  };
 </script>
  
<style scoped>

  .navbar {
      background-color: rgba(0, 0, 0, 0.64); /* Semi-transparent background color */
      border-radius: 25px; /* Rounded borders */
      padding: 20px 40px; /* Padding to give some space inside the navbar */
      margin-top: 0px;
      display:flex;
      justify-content: center;
      align-items: center;
  }

  .navbar-list {
      list-style-type: none; /* Remove default list styles */
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 40px; /* Use gap for equal spacing between items */
  }

  .navbar-item {
      display: inline; /* Display list items horizontally */
  }

  .navbar-link {
      text-decoration: none; /* Remove underline from links */
      color: #D35400; /* Text color */
      font-family: 'Oxanium', sans-serif;
      font-weight: 300;
      font-size: 25px;
      position: relative; /* Ensure proper positioning of the pseudo-element */
  }


  /* CSS for hover effect */
  .navbar-link:hover {
      color: white; /* Text color when hovered */
      /* font-weight: bold; */
  }

  /* CSS for active (clicked) state */
  .navbar-link.clicked {
      color: white; /* Text color when clicked */
      font-weight: bold;
  }
</style>


<style>
  html, body, #app {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
  }

  body {
    font-family: 'Oxanium', sans-serif;
    background-color: #f0f0f0; /* Example background color */
  }
</style>

  