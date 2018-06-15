import {Component} from '@angular/core'

@Component({
    selector: 'deuxieme-composant',
    template: `<div>
                    <h2> 2e composant réussi {{nom}}</h2> 
    </div>`,
    styles: [`h2 {color:yellow`]
})
export class DeuxiemeComposantComponent {}