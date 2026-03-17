function copyQuote() {
  const text = document.getElementById('quote').innerText;
  navigator.clipboard.writeText(text);
}