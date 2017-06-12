# Choose Yourown Adventure

We will be creating a game from start to finish over the course of my kata adventures.

## Part 1 - 6.12.17

Determine the number of parent nodes necessary for the given story. Each parent node is the key of the current array level.

Your story is:

$story = [
    <br>&nbsp;&nbsp;&nbsp;&nbsp;'You see an animal. Do you:' => [
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'Touch it?' => [ 
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'You got bit'
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'Walk away?' => [
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'You survived' => [
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'You win!'
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]
    <br>&nbsp;&nbsp;&nbsp;&nbsp;]
    <br>];

The parent nodes for the above story are: 
<ul>
<li>'You see a dog. Do you:' 
<li>'Touch it?' 
<li>'Walk away?' 
<li>'You survived'