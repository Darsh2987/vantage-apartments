

  function addClassToListItem() {
    const li = document.querySelectorAll(".mobile-location-post-card-info ul li");
    li.forEach(e => {
      const span = document.createElement("span")
      span.classList.add("fas", "fa-star");
      e.prepend(span);
    });
  }

  addClassToListItem();
