function showDetails(id) {
    // Fetch passenger details from the server using AJAX
    fetch(`getPassengerDetails.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            // Populate the modal with details
            const modalDetails = document.getElementById('modalDetails');
            modalDetails.innerHTML = `
                <p><strong>User:</strong> ${data.user}</p>
                <p><strong>ID:</strong> ${data.id}</p>
                <p><strong>Email:</strong> ${data.email}</p>
                <p><strong>Ticket:</strong> ${data.ticket}</p>
                <p><strong>Status:</strong> ${data.dstatus}</p>
                <p><strong>Details:</strong> ${data.dtext}</p>
                <p><strong>Date:</strong> ${data.ddate}</p>
            `;

            // Show the modal
            const modal = document.getElementById('detailsModal');
            modal.style.display = 'block';
        })
        .catch(error => console.error('Error fetching details:', error));
}

// Close modal function
function closeModal() {
    const modal = document.getElementById('detailsModal');
    modal.style.display = 'none';
}

// Close modal when clicking outside of the modal
window.onclick = function(event) {
    const modal = document.getElementById('detailsModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}