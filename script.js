const userName = document.getElementById('userName')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if(userName
        .value === '' || userName.value == null){
        messages.push('UserName is required')
    }

    if(password.value ==='' || password.value == null){
        messages.push('Password is required') 
    }
    

    if(messages.length>0){
        e.preventDefault()
        errorElement.innerText = messages.join(' , ')
    }
});