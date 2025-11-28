const toggleAI = document.getElementById('toggleAI');
    const aiPopup = document.getElementById('aiAssistant');
    const closeAI = document.getElementById('closeAI');
    const chatBody = document.getElementById('chatBody');
    const form = document.getElementById('aiForm');
    const input = document.getElementById('userMessage');

    toggleAI.addEventListener('click', () => {
      aiPopup.style.display = 'block';
      toggleAI.style.display = 'none';
    });

    closeAI.addEventListener('click', () => {
      aiPopup.style.display = 'none';
      toggleAI.style.display = 'block';
    });

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const message = input.value.trim();
      if (!message) return;

      // User bubble
      chatBody.innerHTML += `<div class="chat-bubble user">${message}</div>`;
      chatBody.scrollTop = chatBody.scrollHeight;
      input.value = '';

      // Typing indicator
      chatBody.innerHTML += `<div class="chat-bubble bot" id="typing">Assistant anaandika...</div>`;
      chatBody.scrollTop = chatBody.scrollHeight;

      // Send to backend
      const response = await fetch('/api/ai/respond', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({message})
      });

      const data = await response.json();
      document.getElementById('typing').remove();
      chatBody.innerHTML += `<div class="chat-bubble bot">${data.reply}</div>`;
      chatBody.scrollTop = chatBody.scrollHeight;
    });