---
layout: archive
title: "Contact Me"
permalink: /contact/
author_profile: true
---

Feel free to reach out to me using the contact form below.

<form action="/process_form.php" method="post" onsubmit="return validateForm()">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="message">Message:</label>
  <textarea id="message" name="message" rows="4" required></textarea>

  <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
</form>

<script>
  function validateForm() {
    var emailInput = document.getElementById("email").value;
    if (emailInput.indexOf("@") === -1 || emailInput.indexOf(".") === -1) {
      alert("Please use a valid email address.");
      return false;
    }
    return true;
  }
</script>