<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Tambah Produk Baru</h2>
    <?php if(isset(\System.Management.Automation.ParseException: At line:3 char:6
+ cat << 'EOF' > manajemen-produk/config/Database.php
+      ~
Missing file specification after redirection operator.

At line:3 char:5
+ cat << 'EOF' > manajemen-produk/config/Database.php
+     ~
The '<' operator is reserved for future use.

At line:3 char:6
+ cat << 'EOF' > manajemen-produk/config/Database.php
+      ~
The '<' operator is reserved for future use.

At line:5 char:16
+ class Database {
+                ~
Missing closing '}' in statement block or type definition.

At line:12 char:35
+     public function getConnection() {
+                                   ~
An expression was expected after '('.

At line:13 char:15
+         $this->conn = null;
+               ~
You must provide a value expression following the '-' operator.

At line:13 char:21
+         $this->conn = null;
+                     ~
Unexpected token '=' in expression or statement.

At line:15 char:19
+             $this->conn = new PDO("mysql:host=" . $this->host . ";dbn ...
+                   ~
You must provide a value expression following the '-' operator.

At line:15 char:25
+             $this->conn = new PDO("mysql:host=" . $this->host . ";dbn ...
+                         ~
Unexpected token '=' in expression or statement.

At line:15 char:49
+             $this->conn = new PDO("mysql:host=" . $this->host . ";dbn ...
+                                                 ~
Unexpected token '.' in expression or statement.

Not all parse errors were reported.  Correct the reported errors and try again.
   at System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   at Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'.)): ?>
        <div class="alert alert-danger"><?= \System.Management.Automation.ParseException: At line:3 char:6
+ cat << 'EOF' > manajemen-produk/config/Database.php
+      ~
Missing file specification after redirection operator.

At line:3 char:5
+ cat << 'EOF' > manajemen-produk/config/Database.php
+     ~
The '<' operator is reserved for future use.

At line:3 char:6
+ cat << 'EOF' > manajemen-produk/config/Database.php
+      ~
The '<' operator is reserved for future use.

At line:5 char:16
+ class Database {
+                ~
Missing closing '}' in statement block or type definition.

At line:12 char:35
+     public function getConnection() {
+                                   ~
An expression was expected after '('.

At line:13 char:15
+         $this->conn = null;
+               ~
You must provide a value expression following the '-' operator.

At line:13 char:21
+         $this->conn = null;
+                     ~
Unexpected token '=' in expression or statement.

At line:15 char:19
+             $this->conn = new PDO("mysql:host=" . $this->host . ";dbn ...
+                   ~
You must provide a value expression following the '-' operator.

At line:15 char:25
+             $this->conn = new PDO("mysql:host=" . $this->host . ";dbn ...
+                         ~
Unexpected token '=' in expression or statement.

At line:15 char:49
+             $this->conn = new PDO("mysql:host=" . $this->host . ";dbn ...
+                                                 ~
Unexpected token '.' in expression or statement.

Not all parse errors were reported.  Correct the reported errors and try again.
   at System.Management.Automation.Runspaces.PipelineBase.Invoke(IEnumerable input)
   at Microsoft.PowerShell.Executor.ExecuteCommandHelper(Pipeline tempPipeline, Exception& exceptionThrown, ExecutionOptions options) A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'. A parameter cannot be found that matches parameter name 'Chord'.; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga (Rp)</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php?action=index" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
