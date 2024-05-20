const apartment = document.getElementById('apartment');

const rooms = apartment.getElementsByClassName('rooms');

if(rooms.length <= 0){
    const noChild = document.createElement('h2');
    noChild.textContent = 'NO RANTED ROOMS';
    apartment.appendChild(noChild);
}else{
    for (let i = 0; i < rooms.length; i++){
        const room_number = rooms[i].querySelector('p');
        room_number.textContent = `ROOM ${i + 1}`;
    }
}
