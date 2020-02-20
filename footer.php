<hr />
<p class="intro"><b>&copy; MasterArchivist </b><br /><a href="mailto:masterarchivist@qarchives.ga" target="_blank">masterarchivist@qarchives.ga</a> | <a href="mailto:masterarchivist@protonmail.com" target="_blank">masterarchivist@protonmail.com</a> | <a href="mailto:masterarchivistma@gmail.com" target="_blank">masterarchivistma@gmail.com</a></p>

<hr />
[ space intentionally left blank ]
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
[ space intentionally left blank ]

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> /* This function takes a thumnail and inline expands it on click. */
$(document).ready(function(){
 $("img").click(function(){$(this).toggleClass("thumbnail");});
});

var i;
/* This function takes a qlink and inline expands it on mouse click. */
var coll = document.getElementsByClassName("sqlinks");
for (i = 0; i < coll.length; i++) {
 coll[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var content = this.nextElementSibling;
  if (content.style.display === "block") {
   content.style.display = "none";
  } else {
   content.style.display = "block";
  }
 });
}

/* This function takes a quotelink and inline expands it on mouse click. */
var coll = document.getElementsByClassName("quotelink");
for (i = 0; i < coll.length; i++) {
 coll[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var content = this.nextElementSibling;
  if (content.style.display === "block") {
   content.style.display = "none";
  } else {
   content.style.display = "block";
  }
 });
}

/* This function takes an embedlink and inline expands it on mouse click. */
var coll = document.getElementsByClassName("embedlink");
for (i = 0; i < coll.length; i++) {
 coll[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var content = this.nextElementSibling;
  if (content.style.display === "block") {
   content.style.display = "none";
  } else {
   content.style.display = "block";
  }
 });
}
</script>