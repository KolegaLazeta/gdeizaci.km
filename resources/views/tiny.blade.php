<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/lag49hai6glpfbquj4da3u1h7wi6sa1vgl8mtxq2qpz2e5z3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
  <textarea>
    Welcome to TinyMCE!
  </textarea>
  <script>
   _tinymce.init({
  selector: 'textarea',
  init_instance_callback : function(editor) {
    var freeTiny = document.querySelector('.tox .tox-notification--in');
    freeTiny.style.display = 'none';
  }
 });

</script>
</body>
</html>