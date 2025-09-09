<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert / Delete / Update Example</title>
</head>
<body>
    <form>
        Enter name: 
        <input type="text" id="name" name="name"><br><br>

        Enter Marks: 
        <input type="text" id="marks" name="marks"><br><br>

        Enter Id (for delete/update): 
        <input type="number" id="id" name="id"><br><br>

        <!-- Buttons -->
        <button type="button" id="btnInsert">Insert</button>
        <button type="button" id="btnDelete">Delete</button>
        <button type="button" id="btnUpdate">Update</button>
    </form>

    <script>
        // ================= Insert =================
        async function insert() {
            let formdata = new FormData();
            formdata.append("name", document.getElementById("name").value);
            formdata.append("marks", document.getElementById("marks").value);
            formdata.append("id", document.getElementById("id").value);

            let res = await fetch("http://localhost/CRUD/insert.php", {
                method: "POST",
                body: formdata
            });

            let data = await res.text();
            alert(data);
        }
        document.getElementById("btnInsert").addEventListener("click", insert);

        // ================= Delete =================
        async function remove() {
            let formdata = new FormData();
            formdata.append("id", document.getElementById("id").value);

            let res = await fetch("http://localhost/CRUD/delete.php", {
                method: "POST",
                body: formdata
            });

            let data = await res.text();
            alert(data);
        }
        document.getElementById("btnDelete").addEventListener("click", remove);

        // ================= Update =================
        async function update() {
            let formdata = new FormData();
            formdata.append("id", document.getElementById("id").value);
            formdata.append("name", document.getElementById("name").value);
            formdata.append("marks", document.getElementById("marks").value);

            let res = await fetch("http://localhost/CRUD/update.php", {
                method: "POST",
                body: formdata
            });

            let data = await res.text();
            alert(data);
        }
        document.getElementById("btnUpdate").addEventListener("click", update);
    </script>
</body>
</html>
