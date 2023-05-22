let myForm = document.querySelector("#myForm");
let myHeaders = new Headers({"Content-Type":"application/json"});
let config = {
    headers: myHeaders
};

myForm.addEventListener("submit", async(e) => {
    e.preventDefault();
    config.method = "POST";
    let data = Object.fromEntries(new FormData(e.target));
    config.body = JSON.stringify(data);
    let res = await (await fetch("api.php", config)).text();
    document.querySelector("pre").innerHTML = res;
});