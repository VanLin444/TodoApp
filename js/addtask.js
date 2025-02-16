const addTaskBtn = document.querySelector("button");
const taskTxt = document.getElementById("taskTxt");

addTaskBtn.onclick =()=>{
    let val = taskTxt.value;
    console.log(val);
}