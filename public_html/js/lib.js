function activateSidebar() {
    var filename = location.href;
    filename = filename.substr(filename.lastIndexOf('/') + 1);
    if (!filename || filename.indexOf('index.php') >= 0) {
        $("#Home").attr('class', 'active');
    } else if (filename.indexOf('contest.php') >= 0) {
        $("#Contests").attr('class', 'active');
    } else if (filename.indexOf('profile.php') >= 0) {
        $("#Profile").attr('class', 'active');
    } else alert(filename);
}


function atest(id) {
    // $(".submenuentries").attr("class", "submenuentries show");
    $(id).modal('show');
}


function activateSubmenu(id) {
    $(id).attr("class", "submenuentries show");
}


function deactivateSubmenu(id) {
    $(id).attr("class", "submenuentries");
}


function doNothing() {
    alert("doNothing");
}


function beforeSignin() {
    $("#emailSignin").html
}


function beforeRegister() {

}
