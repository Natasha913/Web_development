function loadUser(){
    fetch('https://jsonplaceholder.typicode.com/users')
    .then(response => response.json())
    .then(data => displayUser(data));
}
function displayUser(data){
    const ul = document.getElementById('user');
    for(const user of data){
        console.log(user.name);
        const li = document.createElement('li');
        li.innerText = `name: ${user.name} email: ${user.email}`;
        ul.appendChild(li);
    }
}
const loadSingleUser = () => {
    fetch('http://localhost/Web_development/api/list/list-1.json')
    .then(res => res.json())
    .then(data => console.log(data))
  }
  loadSingleUser();
