const observe = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.Intersectiing) {
            entry.target.classlist.add('show');
        } else {
            entry.target.classlist.remove('show')
        }
    });
});

const hiddenElement = document.querySelectorAll('.hidden');
hiddenElement.forEach((el) => ResizeObserver.observe(el));
