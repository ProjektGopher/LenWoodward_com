<a href="{{ $project->GitHub->html_url }}" target="_blank">
    <article class="bg-white h-full rounded-2xl shadow-2xl p-4 sm:p-8 mt-12 text-lg text-gray-700 leading-relaxed md:leading-loose font-extralight flex flex-col justify-between hover:scale-105 transform transition-all">
      {{ $slot }}
      <p class="w-4/5 mx-auto">
        {{ $project->GitHub->description }}
      </p>
      <ul class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 justify-between w-4/5 mx-auto mt-12 text-base text-gray-500">
        <li class="flex gap-2 content-center justify-start"><x-svg.tag />{{ $project->Packagist->versions[1] }}</li>
        <li class="flex gap-2 content-center justify-start"><x-svg.star />{{ $project->GitHub->stargazers_count }}</li>
        <li class="flex gap-2 content-center justify-start"><x-svg.download />{{ $project->Packagist->downloads['total'] }} downloads</li>
      </ul>
    </article>
</a>
