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

