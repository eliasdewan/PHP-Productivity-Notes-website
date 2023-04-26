// Timer
const countdown = document.getElementById('countdown');
const startBtn = document.getElementById('start');
const stopBtn = document.getElementById('stop');
let interval;

startBtn.addEventListener('click', () => {
	const minutes = 25;
	let seconds = 0;
	interval = setInterval(() => {
		if (seconds === 0) {
			if (minutes === 0) {
				clearInterval(interval);
				countdown.innerHTML = 'Time is up!';
				return;
			} else {
				minutes--;
				seconds = 59;
			}
		} else {
			seconds--;
		}
		countdown.innerHTML = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
	}, 1000);
});

stopBtn.addEventListener('click', () => {
	clearInterval(interval);
	countdown.innerHTML = '25:00';
});

// To-Do List
const todoList = document.getElementById('todo-list');
const newTaskInput = document.getElementById('new-task');
const addTaskBtn = document.getElementById('add-task');

addTaskBtn.addEventListener('click', ()
