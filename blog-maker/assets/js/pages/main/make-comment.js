document.querySelector(".comment-form").addEventListener("submit", async function(e){
    const form = e.target;
    const formData = new FormData(form);
    const postId = currentPostId;

    formData.append("post_id", postId);

    const res = await fetch("/blog-maker/src/pages/make-comment.php",{
        method: "POST",
        body: formData
    }); 
    console.log("submit comment");
});
