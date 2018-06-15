import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  template: `<h1> Bonjour </h1>
              <app-nouveau></app-nouveau>,
              <premier-composant></premier-composant>
              <deuxieme-composant></deuxieme-composant>
              <troisieme-composant></troisieme-composant>
              <quatrieme-composant></quatrieme-composant>`,
  styles: [`h1 {color: blue;}`]
})
export class AppComponent {
  title = 'app';
}
