function edit_row(no) {
    document.getElementById("edit_button" + no).style.display = "none";
    document.getElementById("save_button" + no).style.display = "block";

    var name = document.getElementById("name_row" + no);
    var email = document.getElementById("email_row" + no);
    var password = document.getElementById("password_row" + no);

    var name_data = name.innerHTML;
    var email_data = email.innerHTML;
    var password_data = password.innerHTML;

    name.innerHTML = "<input type='text' id='name_text" + no + "' value='" + name_data + "'>";
    email.innerHTML = "<input type='text' id='email_text" + no + "' value='" + email_data + "'>";
    password.innerHTML = "<input type='text' id='password_text" + no + "' value='" + password_data + "'>";
}

function save_row(no) {
    var name_val = document.getElementById("name_text" + no).value;
    var email_val = document.getElementById("email_text" + no).value;
    var password_val = document.getElementById("password_text" + no).value;

    document.getElementById("name_row" + no).innerHTML = name_val;
    document.getElementById("email_row" + no).innerHTML = email_val;
    document.getElementById("password_row" + no).innerHTML = password_val;

    document.getElementById("edit_button" + no).style.display = "block";
    document.getElementById("save_button" + no).style.display = "none";
}

function delete_row(no) {
    document.getElementById("row" + no + "").outerHTML = "";
}