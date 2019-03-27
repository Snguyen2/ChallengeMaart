<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 26-3-2019
 * Time: 08:37
 */?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="body">
<label>Kies een wagen</label>
<select name="Auto" id="input" multiple>
    <option value="ford">Ford</option>
    <option value="golf">Golf</option>
    <option value="opel">Opel</option>
    <option value="volvo">Volvo</option>
</select>
<button id="button">Verzenden</button><br>

<script>
    Node.prototype.getValues = function() {
        let result = [];
        const options = this.getElementsByTagName("option");
        for(let i = 0; i < options.length; i++) {
            if(options[i].selected) {
                result.push(options[i]);
            }
        }
        return result;
    };
    const body = document.getElementById("body");
    const input = document.getElementById("input");
    const button = document.getElementById("button");
    button.addEventListener("click", () => {
        const img = document.querySelectorAll("img");
        if(img.length > 0) {
            for(let i = 0; i < img.length; i++) {
                body.removeChild(img[i]);
            }
        }
        const values = input.getValues();
        if (values.length > 1) {
            const img = ["ford", "golf", "opel", "volvo"];
            for(let i = 0; i < values.length; i++) {
                for(let j = 0; j < img.length; j++) {
                    if(values[i].value === img[j]) {
                        const element = document.createElement("img");
                        element.setAttribute("src", values[i].value + ".jpg");img
                        body.appendChild(element);
                    }
                }
            }
        } else {
            console.error("Minimaal 2 plaatjes aub");
        }
    });

</script>
</body>
</html
