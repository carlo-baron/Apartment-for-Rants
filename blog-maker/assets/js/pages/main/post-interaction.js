const viewCommentsModal = document.getElementById("modal");
const exitCommentModal = document.getElementById("exit-modal");

document.addEventListener("click", (event) => {
    const target = event.target;
    const form = target.closest(".post-interactions");
    if (!form) return;

    const postId = form.dataset.postId;

    if (target.classList.contains("like-btn")) {
        event.preventDefault();
        console.log(`Liked post ${postId}`);
    } else if (target.classList.contains("comment-btn")) {
        event.preventDefault();
        openPost(postId);
        
        console.log(`Commented post ${postId}`);
    } else if (target.classList.contains("share-btn")) {
        event.preventDefault();
        console.log(`Shared post ${postId}`);
    }
});

exitCommentModal.addEventListener("click", ()=>{
    viewCommentsModal.style.display = "none";
    document.body.style.overflow = "auto";
});

function openPost(postId){
    let commentContainer = document.getElementById("comment-post");
    document.body.style.overflow = "hidden";

    viewCommentsModal.style.display = "flex";
    viewCommentsModal.querySelector("h2").childNodes[0].nodeValue = postsDataById[postId]["display_name"] + "'s post";

    let html = `
        <div class="post-body">
            <div class="post-head">
                <div class="post-number">001</div><br>
                <div class="title">${postsDataById[postId]["title"]}</div>
            </div>
            <div class="post-content">${postsDataById[postId]["content"]}</div>
            <form method="post" class="post-interactions" data-post-id="${postsDataById[postId]["post_id"]}">
                <button class="like-btn" type="button" name="like">Like</button>
                <div class="reaction-tab"></div>
                <button class="comment-btn" type="button" name="comment">Comment</button>
                <button class="share-btn" type="button" name="share">Share</button>
            </form>
        </div>
    `;
    commentContainer.innerHTML = html;
    
    getComments(postId, commentContainer);
}

async function getComments(postId, commentContainer){
    const res = await fetch("/blog-maker/src/api/get-comments.php?id=" + postId);
    comments = await res.json();

    comments.forEach(comment => {
        console.log(comment["content"]);
        commentContainer.innerHTML += `<p>${comment['content']}</p>`; 
    });
}
