let myForm = document.querySelector("#myForm");

myForm.addEventListener("submit", async(e) => {
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    console.log(data);
    let res = await (await fetch("api.php", {method: "POST",
                                             body: JSON.stringify(data),
                                             headers: {"Content-Type":"application/json"}
                                            })).text();
    console.log(res);
    document.querySelector("pre").innerHTML = res;
});