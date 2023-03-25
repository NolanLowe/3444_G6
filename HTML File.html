<!DOCTYPE html>
<html>
<head>
    <title>Create Task - Task Manager</title>
    <style>
      * {
	box-sizing: border-box;
}

body {
	background-color: #f2f2f2;
	font-family: Arial, sans-serif;
}

.container {
	margin: 0 auto;
	width: 80%;
	padding: 20px;
	background-color: #fff;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}

h1 {
	text-align: center;
}

form {
	display: flex;
	flex-wrap: wrap;
	margin-bottom: 20px;
}

label {
	width: 100%;
	margin-bottom: 10px;
	font-weight: bold;
}

input[type="text"],
textarea {
	width: 100%;
	padding: 10px;
	margin-bottom: 10px;
	border: none;
	border-radius: 3px;
}

button {
	padding: 10px;
	background-color: #008CBA;
	color: #fff;
	border: none;
	border-radius: 3px;
	cursor: pointer;
}

button:hover {
	background-color: #005f73;
}

ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

    </style>
</head>
<body>
<h1>Create Task</h1>
<form onsubmit="return validateForm()">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br>
    <label for="due-date">Due Date:</label>
    <input type="date" id="due-date" name="due-date" required><br>
    <label for="priority">Priority:</label>
    <select id="priority" name="priority" required>
        <option value="">Select a priority</option>
        <option value="high">High</option>
        <option value="medium">Medium</option>
        <option value="low">Low</option>
    </select><br>
    <button type="submit">Create Task</button>
</form>
<script>
      // Add a new task
function addTask(e) {
  // Prevent the form from submitting
  e.preventDefault();

  // Get the task and description input values
  var taskInput = document.getElementById("title");
  var descriptionInput = document.getElementById("description");
  var taskValue = taskInput.value;
  var descriptionValue = descriptionInput.value;

  // If the task input is not empty, create a new list item
  if (taskValue !== "") {
    var taskList = document.getElementById("taskList");
    var listItem = document.createElement("li");
    listItem.innerHTML = "<strong>" + taskValue + ":</strong> " + descriptionValue;
    taskList.appendChild(listItem);
    taskInput.value = "";
    descriptionInput.value = "";
  }
}

// Get the elements
var addTaskButton = document.getElementById("addTaskButton");

if (!addTaskButton) {
  console.error("Could not find add task button in document");
} else {
  // Add the task when the button is clicked
  addTaskButton.addEventListener("click", addTask);
}

// Remove middle man
var taskInput = document.getElementById("title");
var descriptionInput = document.getElementById("description");

if (!taskInput || !descriptionInput) {
  console.error("Could not find task or description input in document");
} else {
  // Add the task when the enter key is pressed
taskInput.addEventListener("keypress", function (e) {
// Check if the enter key was pressed
if (e.keyCode === 13) {
addTask(e);
}
});

descriptionInput.addEventListener("keypress", function (e) {
// Check if the enter key was pressed
if (e.keyCode === 13) {
addTask(e);
}
});
}

function validateForm() {
var dueDateInput = document.getElementById("due-date");
var priorityInput = document.getElementById("priority");
var dueDateValue = dueDateInput.value;
var priorityValue = priorityInput.value;

// Check if due date is in the past
var currentDate = new Date();
var dueDate = new Date(dueDateValue);
if (dueDate < currentDate) {
alert("Due date must be in the future.");
return false;
}

// Check if priority is selected
if (priorityValue === "") {
alert("Please select a priority.");
return false;
}

return true;
}


    </script>
    <div class="container"></div>
    <ul id="taskList"></ul>
</body>
</html>
