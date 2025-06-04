fetch("/blog-maker/src/api/get-posts.php")
    .then(res => res.json())
    .then(data => {
        let container = document.getElementById("posts-container");
        data.forEach(post => {
            let html = `
                <div class="post-body">
                    <div class="post-head">
                        <div class="post-number">001</div><br>
                        <div class="title">${post.title}</div>
                    </div>
                    <div class="post-content">${post.content}</div>
                    <form method="post" class="post-interactions" data-post-id="${post.post_id}">
                        <button class="like-btn" type="button" name="like">Like</button>
                        <div class="reaction-tab"></div>
                        <button class="comment-btn" type="button" name="comment">Comment</button>
                        <button class="share-btn" type="button" name="share">Share</button>
                    </form>
                </div>
            `;
            container.innerHTML += html;
        });
    });

const createPostButton = document.getElementById("create-post");

createPostButton.addEventListener("click", () => {
    window.location.href = "create-post.php";
});

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
        console.log(`Commented post ${postId}`);
    } else if (target.classList.contains("share-btn")) {
        event.preventDefault();
        console.log(`Shared post ${postId}`);
    }
});

