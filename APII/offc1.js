const loadSingleUser = () => {
  fetch('http://localhost/Web_development/api/list/list-1.json')
  .then(res => res.json())
  .then(data => console.log(data))
}
loadSingleUser();