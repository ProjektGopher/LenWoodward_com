require('./bootstrap');

const list = () => {
  return [
      'contactDetails()',
  ]
}
const contactDetails = () => {
  return {
      name: 'Len Woodward',
      phone: '1.604.992.2418',
      email: 'Len@ProjektGopher.com',
      twitter: '@ProjektGopher',
      github: 'https://github.com/ProjektGopher',
  }
}
console.log(`Well hello there, follow console-jockey!`)
console.log(`Why don't you try running the list() command to see what kind of stuff I've left here for you.`)
