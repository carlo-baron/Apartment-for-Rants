document.addEventListener("click", function (event){
    const target = event.target;
    const postBody = event.target.closest(".post-body");
    const postId = postBody.dataset.postId;

    if(target.classList.contains("like-btn")){
        console.log(`Liked post ${postId}`);
    }else if(target.classList.contains("comment-btn")){
        console.log(`Commented post ${postId}`);
        const commentBox = postBody.nextElementSibling;

        const displayState = commentBox.style.display;

        if(displayState == "none"){
            commentBox.style.display = "block";
        }else{
            commentBox.style.display = "none";
        }
    }else if(target.classList.contains("share-btn")){
        console.log(`Shared post ${postId}`);
    }

});
