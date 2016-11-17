function confirmDelete()
{
    var answer = confirm("Czy na pewno chcesz usunąć ten wpis ?");

    if (answer) {
        return true;
    } else {
        return false;
    }
}