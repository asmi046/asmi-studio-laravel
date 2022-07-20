document.addEventListener("DOMContentLoaded", () => { 
    let send_popup_input = document.querySelectorAll("input")

    for (let elem of send_popup_input)
    elem.addEventListener("click", function (e) {
        e.preventDefault()
        elem.classList.remove("input_error")
    });

    let send_btn = document.querySelector(".new_send_btn")

    if (send_btn)
        send_btn.addEventListener("click", function (e) {
            e.preventDefault()
            let loader = document.querySelector(".popup_btn_wrapper img")
            let form = document.getElementById("request_call")
            let data = new FormData(form)
            let actionAdr = form.getAttribute("action")

            loader.style.display = "block";
            var xhr = new XMLHttpRequest()
            
            xhr.open("post", actionAdr, true)
            xhr.responseType = 'json'
            xhr.setRequestHeader('Accept', 'application/json')
            
            xhr.onload = function () {
                console.log(xhr)
                if (xhr.status == 422) {
                    
                    for (let error of Object.entries(xhr.response.errors) )
                     {
                        console.log(error[0])
                        console.log(error[1][0])
                        form.querySelector(".input_"+error[0]).classList.add("input_error")

                     }
                } else

                if (xhr.status == 200) {
                    document.location.href = "/thanks"
                }
                
                loader.style.display = "none";
            };

            xhr.onerror = function () {
                alert(xhr.responseText)
                console.log(xhr.status)
                loader.style.display = "none";
            };

            xhr.send(data);
        });
})