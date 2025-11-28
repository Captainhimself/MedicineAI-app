document.getElementById("searchInput").addEventListener("keyup", function () {
    const query = this.value;
    const xhr = new XMLHttpRequest();
    xhr.open("GET", + encodeURIComponent(query), true);
    xhr.onload = function () {
      if (this.status === 200) {
        const parser = new DOMParser();
        const newDoc = parser.parseFromString(this.responseText, 'text/html');
        const newTable = newDoc.getElementById('medicineTable').innerHTML;
        document.getElementById('medicineTable').innerHTML = newTable;
      }
    };
    xhr.send();
  });