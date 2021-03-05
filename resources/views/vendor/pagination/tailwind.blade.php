@if ($paginator->hasPages())
    <nav>
        <div class="pagination">
             @if($paginator->currentPage() == 1)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 7.6%" aria-valuenow="7.6" aria-valuemin="0" aria-valuemax="100">7%</div>
             @endif
             @if($paginator->currentPage() == 2)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 15.2%" aria-valuenow="15.2" aria-valuemin="0" aria-valuemax="100">15%</div>
             @endif
             @if($paginator->currentPage() == 3)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 22.8%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">22%</div>
             @endif
             @if($paginator->currentPage() == 4)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
             @endif
             @if($paginator->currentPage() == 5)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 38.4%" aria-valuenow="38.4" aria-valuemin="0" aria-valuemax="100">38%</div>
             @endif
             @if($paginator->currentPage() == 6)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 45.6%" aria-valuenow="45.6" aria-valuemin="0" aria-valuemax="100">45%</div>
             @endif
             @if($paginator->currentPage() == 7)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 53.2%" aria-valuenow="53.2" aria-valuemin="0" aria-valuemax="100">53%</div>
             @endif
             @if($paginator->currentPage() == 8)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 60.8%" aria-valuenow="60.8" aria-valuemin="0" aria-valuemax="100">60%</div>
             @endif
             @if($paginator->currentPage() == 9)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 68.4%" aria-valuenow="68.4" aria-valuemin="0" aria-valuemax="100">68%</div>
             @endif
             @if($paginator->currentPage() == 10)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">76%</div>
             @endif
             @if($paginator->currentPage() == 11)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 83.6%" aria-valuenow="83.6" aria-valuemin="0" aria-valuemax="100">83%</div>
             @endif
             @if($paginator->currentPage() == 12)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 91.2%" aria-valuenow="91.2" aria-valuemin="0" aria-valuemax="100">91%</div>
             @endif
             @if($paginator->currentPage() == 13)
                <div class="progress progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
             @endif
            </li>
        </div>
        <ul class="pagination">
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link botao_proximo" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Próximo</a>
                </li>
            @else
                <li class="page-item">
                <a href="/resultado" class="page-link btn botao_enviar">Enviar</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
