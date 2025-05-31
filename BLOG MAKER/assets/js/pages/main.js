document.addEventListener("click", (event) => {
    const target = event.target;
    const form = target.closest(".post-interactions");
    if (!form) return;

    const postId = form.dataset.postId;

    if (target.classList.contains("like-btn")) {
        event.preventDefault();
        console.log(`Liked post ${postId}`);
        handleInteraction("like", postId);
    } else if (target.classList.contains("comment-btn")) {
        event.preventDefault();
        console.log(`Commented post ${postId}`);
        handleInteraction("comment", postId);
    } else if (target.classList.contains("share-btn")) {
        event.preventDefault();
        console.log(`Shared post ${postId}`);
        handleInteraction("share", postId);
    }
});

function handleInteraction(action, postId) {
    fetch("comment-post.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ action: action, post_id: postId })
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                if (action === "comment") {
                    window.location.href = "/BLOG%20MAKER/open-post.php";
                } else {
                    console.log(`${action} action succeeded for post ${postId}`);
                }
            } else {
                console.error(`Error with ${action} action:`, data.error);
            }
        })
        .catch((error) => {
            console.error("Fetch error:", error);
        });
}
