function electionsWinners(votes, k) {
  let possibleWinners = 0;
  const max = Math.max(...votes);
  
  if (k === 0) {
    const candidateOne = votes.indexOf(max);
    const candidateTwo = votes.lastIndexOf(max);
    
    return candidateOne === candidateTwo ? 1 : 0;
  }
  
  for (let i = 0; i < votes.length; i++) {
    if (votes[i] + k > max) {
      possibleWinners++;
    } 
  }
  
  return possibleWinners;
}