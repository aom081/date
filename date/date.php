<!DOCTYPE html>
<html>

<head>
  <title>Selectable Date Display</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="date.css">
</head>

<body>
  <h1>Selectable Date Display</h1>
  <div class="date-picker">
    <input type="date" id="selected-date">
    <p id="displayed-date"></p>
  </div>

  <script>
    const selectedDate = document.getElementById("selected-date");
    const displayedDate = document.getElementById("displayed-date");

    selectedDate.addEventListener("change", () => {
      const date = new Date(selectedDate.value);
      const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      };
      displayedDate.innerHTML = date.toLocaleDateString(undefined, options);
    });
  </script>
</body>

</html>