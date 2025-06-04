fetch("/blog-maker/src/api/user-public-data.php")
    .then(res => res.json())
    .then(datas => {
        datas.forEach(data => { 
            let container = document.getElementById("content");
            let html = `
                <p>${data.display_name}</p>
                <p>${data.birthday}</p>
                <p>${data.location}</p>
                <p>${data.reg_date}</p>
            `;
            container.innerHTML += html;
        });
    });
