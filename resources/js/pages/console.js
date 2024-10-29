window.addEventListener("load", () => {
    const userAccount = document.getElementById("userAccount");
    const dialogUserAccount = document.getElementById("dialogUserAccount");
    const closeDialogUserAccount = document.getElementById(
        "closeDialogUserAccount"
    );

    userAccount.addEventListener("click", (e) => {
        userAccount.classList.remove("hover:bg-gray-800/5");
        userAccount.classList.add("bg-gray-800/5");

        dialogUserAccount.classList.remove("hidden");
    });

    closeDialogUserAccount.addEventListener("click", () => {
        userAccount.classList.remove("bg-gray-800/5");
        userAccount.classList.add("hover:bg-gray-800/5");

        dialogUserAccount.classList.add("hidden");
    });
});
