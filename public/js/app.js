/*import './bootstrap';

import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'

window.Alpine = Alpine
Alpine.plugin(persist)

Alpine.start()
*/
function copyEmail() {
    // Get the email text div
    var copyText = document.getElementById("email");
    var copyButton = document.getElementById("email_button");
    
    navigator.clipboard.writeText(copyText.textContent);
    copyButton.innerText="Copied!";
  }