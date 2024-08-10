<svg {{ $attributes }} viewBox="0 0 1500 1000" alt="Portrait of the Horstead-Woodward family strolling through a garden.">
  <clipPath id="mask" clipPathUnits="userSpaceOnUse">
      <rect id="ashlyn"   x="217" y="37"  width="457" height="939" rx="20">
          <animateMotion dur="8s" repeatCount="indefinite">
              <mpath xlink:href="#ashlynPath"/>
          </animateMotion>
      </rect>
      <rect id="len"      x="826" y="0"   width="457" height="981" rx="20">
          <animateMotion dur="14s" repeatCount="indefinite">
              <mpath xlink:href="#lenPath"/>
          </animateMotion>
      </rect>
      <rect id="allie"    x="553" y="410" width="374" height="535" rx="20">
          <animateMotion dur="10s" repeatCount="indefinite">
              <mpath xlink:href="#alliePath"/>
          </animateMotion>
      </rect>
  </clipPath>
  <defs>
      <path id="alliePath" fill="none" stroke="red"
          d="M 0, 0
              m -50, 0
              a 50,50 0 1,0 100,0
              a 50,50 0 1,0 -100,0"
      />
      <path id="ashlynPath" fill="none" stroke="red"
          d="M 0, 0
              l -50, 0
              l 50, 0
              z"
      />
      <path id="lenPath" fill="none" stroke="red"
          d="M 0, 0
              l 30, 0
              l -30, 0
              z"
      />
  </defs>
  <image xlink:href="{{ asset('img/family.jpg') }}" x="0" y="-129" width="1501" height="1201" style="clip-path: url(#mask);"/>
</svg>
