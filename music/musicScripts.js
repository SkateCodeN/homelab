window.onload = function() {
    fetch('list_music.php')
        .then(response => response.json())
        .then(files => {
            const list = document.getElementById('musicList');
            files.forEach(file => {
                const listItem = document.createElement('li');
                listItem.className = 'music-item';
                
                const link = document.createElement('a');
                link.href = "#";
                link.textContent = file;
                link.onclick = function() { playMusic(file, listItem); };
                
                const audioPlayer = document.createElement('audio');
                audioPlayer.className = 'audio-player';
                audioPlayer.src = 'mp3/' + file;
                audioPlayer.controls = false;

                listItem.appendChild(link);
                listItem.appendChild(audioPlayer);
                list.appendChild(listItem);
            });
        });
};

function playMusic(file, listItem) {
    // Hide controls for all players
    document.querySelectorAll('.audio-player').forEach(player => {
        player.controls = false;
        player.pause();
    });

    // Show controls for the current player and play
    const player = listItem.querySelector('.audio-player');
    player.controls = true;
    player.play();
}
