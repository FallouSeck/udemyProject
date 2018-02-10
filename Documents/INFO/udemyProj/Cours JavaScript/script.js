function Dog(name, color, age)
{
    this.name = name;
    this.color = color;
    this.age = age;
    this.aboie = function()
    {
        console.log(this.name + ": Wouaf wouaf");
    }
}


var petitCaniche = new Dog ("Django", "Green", 18);
// console.log(petitCaniche);

// var grosChienMechant = new Dog ("Brutus", "Black & Yellow", 8);
// console.log(grosChienMechant);
petitCaniche.aboie();
