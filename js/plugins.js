document.querySelector('.control-button span').onclick = function () {
    
    let name = prompt('Enter Your Name :');
    
    if (name === null || name === "") {
        
        document.querySelector('.name span').innerHTML = 'Unknown';
        
    } else {
        
        document.querySelector('.name span').innerHTML = name;
    }
    
    document.querySelector('.control-button').remove();
}

let duration = 1000;
let blkcontainer = document.querySelector('.game-container');
let blocks = Array.from(blkcontainer.children);
let orderRange = [...Array(blocks.length).keys()];

shuffle(orderRange);
// Order Css Property
blocks.forEach((block, index)=> {
    // add Css order property
    
    block.style.order = orderRange[index];
    
    // add Click event
    block.addEventListener('click', function () {
      flipBlock(block);
    });
});
//Flip Back function
function flipBlock(selectedBlock) {
    // add is-flipped class
    selectedBlock.classList.add('is-flipped');
    
    //collect all flipped blocks
    let allflipped = blocks.filter(flippedBlock => flippedBlock.classList.contains('is-flipped'));
    
    // check if two blocks flipped
    if (allflipped.length === 2) {
        // Stop Click function
        stopClick();
        // Check Matched
        checkMatched(allflipped[0], allflipped[1]);
    }
    // Check if win - all blocks have class matched
    let matchedblock = blocks.filter(flippedBlock => flippedBlock.classList.contains('matched'));
    if (matchedblock.length === 20){
        document.querySelector('.control-button.win').style.display = 'block';
        document.getElementById('score').innerHTML = parseInt(parseInt(document.querySelector('.tries span').innerHTML));
        setTimeout("location.reload(true);", 10000);
    }
}
// Stop Click
function stopClick() {
    blkcontainer.classList.add('no-clicking');
    setTimeout(()=> {
        blkcontainer.classList.remove('no-clicking');
    }, duration);
}
// Check Mathed blocks
function checkMatched(firstBlock, secondBlock) {
    let triesElement = document.querySelector('.tries span');
    if (firstBlock.dataset.tech === secondBlock.dataset.tech) {
        document.getElementById('success').play();
        firstBlock.classList.remove('is-flipped');
        secondBlock.classList.remove('is-flipped');
        
        firstBlock.classList.add('matched');
        secondBlock.classList.add('matched');
    } else {
        document.getElementById('fail').play();
        triesElement.innerHTML = parseInt(triesElement.innerHTML) + 1;
        setTimeout(() => {
            firstBlock.classList.remove('is-flipped');
            secondBlock.classList.remove('is-flipped');
        }, duration);
    }
}
// shuffle Function 
function shuffle(array) {
    let current = array.length,
        temp,
        random;
    while (current > 0) {
        random = Math.floor(Math.random() * current);
        current--;
        
        // store in stash
        temp = array[current];
        
        // currnet = random
        array[current] = array[random];
        
        // random = element from stash
         array[random] = temp;
        
           }
    return array;
}
 /** 
    Additions
 **/
// check if all block have class matched
