@extends('frontend.layouts.master')
@section('title','Home')
@push('styles')
<style>
    .ekko-lightbox {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-right: 0 !important
    }

    .ekko-lightbox-container {
        position: relative
    }

    .ekko-lightbox-container > div.ekko-lightbox-item {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%
    }

    .ekko-lightbox iframe {
        width: 100%;
        height: 100%
    }

    .ekko-lightbox-nav-overlay {
        z-index: 1;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: -ms-flexbox;
        display: flex
    }

    .ekko-lightbox-nav-overlay a {
        -ms-flex: 1;
        flex: 1;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        opacity: 0;
        transition: opacity .5s;
        color: #fff;
        font-size: 30px;
        z-index: 1
    }

    .ekko-lightbox-nav-overlay a > * {
        -ms-flex-positive: 1;
        flex-grow: 1
    }

    .ekko-lightbox-nav-overlay a > :focus {
        outline: none
    }

    .ekko-lightbox-nav-overlay a span {
        padding: 0 30px
    }

    .ekko-lightbox-nav-overlay a:last-child span {
        text-align: right
    }

    .ekko-lightbox-nav-overlay a:hover {
        text-decoration: none
    }

    .ekko-lightbox-nav-overlay a:focus {
        outline: none
    }

    .ekko-lightbox-nav-overlay a.disabled {
        cursor: default;
        visibility: hidden
    }

    .ekko-lightbox a:hover {
        opacity: 1;
        text-decoration: none
    }

    .ekko-lightbox .modal-dialog {
        display: none
    }

    .ekko-lightbox .modal-footer {
        text-align: left
    }

    .ekko-lightbox-loader {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-pack: center;
        justify-content: center;
        -ms-flex-align: center;
        align-items: center
    }

    .ekko-lightbox-loader > div {
        width: 40px;
        height: 40px;
        position: relative;
        text-align: center
    }

    .ekko-lightbox-loader > div > div {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #fff;
        opacity: .6;
        position: absolute;
        top: 0;
        left: 0;
        animation: a 2s infinite ease-in-out
    }

    .ekko-lightbox-loader > div > div:last-child {
        animation-delay: -1s
    }

    .modal-dialog .ekko-lightbox-loader > div > div {
        background-color: #333
    }

    @keyframes a {
        0%, to {
            transform: scale(0);
            -webkit-transform: scale(0)
        }
        50% {
            transform: scale(1);
            -webkit-transform: scale(1)
        }
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImVra28tbGlnaHRib3guY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBLGVBQ0UsOEJBQXlCLEFBQXpCLHVCQUF5QixBQUN6QixzQkFBb0IsQUFBcEIsbUJBQW9CLEFBQ3BCLHFCQUF3QixBQUF4Qix1QkFBd0IsQUFDeEIseUJBQTZCLENBQzlCLEFBQ0QseUJBQ0UsaUJBQW1CLENBQ3BCLEFBQ0QsZ0RBQ0Usa0JBQW1CLEFBQ25CLE1BQU8sQUFDUCxPQUFRLEFBQ1IsU0FBVSxBQUNWLFFBQVMsQUFDVCxVQUFZLENBQ2IsQUFDRCxzQkFDRSxXQUFZLEFBQ1osV0FBYSxDQUNkLEFBQ0QsMkJBQ0UsVUFBYSxBQUNiLGtCQUFtQixBQUNuQixNQUFPLEFBQ1AsT0FBUSxBQUNSLFdBQVksQUFDWixZQUFhLEFBQ2Isb0JBQWMsQUFBZCxZQUFjLENBQ2YsQUFDRCw2QkFDRSxXQUFRLEFBQVIsT0FBUSxBQUNSLG9CQUFjLEFBQWQsYUFBYyxBQUNkLHNCQUFvQixBQUFwQixtQkFBb0IsQUFDcEIsVUFBVyxBQUNYLHVCQUF5QixBQUN6QixXQUFZLEFBQ1osZUFBZ0IsQUFDaEIsU0FBYSxDQUNkLEFBQ0QsK0JBQ0Usb0JBQWEsQUFBYixXQUFhLENBQ2QsQUFDRCxvQ0FDRSxZQUFjLENBQ2YsQUFDRCxrQ0FDRSxjQUFnQixDQUNqQixBQUNELDZDQUNFLGdCQUFrQixDQUNuQixBQUNELG1DQUNFLG9CQUFzQixDQUN2QixBQUNELG1DQUNFLFlBQWMsQ0FDZixBQUNELHNDQUNFLGVBQWdCLEFBQ2hCLGlCQUFtQixDQUNwQixBQUNELHVCQUNFLFVBQVcsQUFDWCxvQkFBc0IsQ0FDdkIsQUFDRCw2QkFDRSxZQUFjLENBQ2YsQUFDRCw2QkFDRSxlQUFpQixDQUNsQixBQUNELHNCQUNFLGtCQUFtQixBQUNuQixNQUFPLEFBQ1AsT0FBUSxBQUNSLFNBQVUsQUFDVixRQUFTLEFBQ1QsV0FBWSxBQUNaLG9CQUFjLEFBQWQsYUFBYyxBQUVkLDBCQUF1QixBQUF2QixzQkFBdUIsQUFFdkIscUJBQXdCLEFBQXhCLHVCQUF3QixBQUV4QixzQkFBb0IsQUFBcEIsa0JBQW9CLENBQ3JCLEFBQ0QsMEJBQ0UsV0FBWSxBQUNaLFlBQWEsQUFDYixrQkFBbUIsQUFDbkIsaUJBQW1CLENBQ3BCLEFBQ0QsOEJBQ0UsV0FBWSxBQUNaLFlBQWEsQUFDYixrQkFBbUIsQUFDbkIsc0JBQXVCLEFBQ3ZCLFdBQWEsQUFDYixrQkFBbUIsQUFDbkIsTUFBTyxBQUNQLE9BQVEsQUFDUixtQ0FBNkMsQ0FDOUMsQUFDRCx5Q0FDRSxtQkFBcUIsQ0FDdEIsQUFDRCw0Q0FDRSxxQkFBdUIsQ0FDeEIsQUFVRCxhQUNFLE1BRUUsbUJBQW9CLEFBQ3BCLDBCQUE0QixDQUM3QixBQUNELElBQ0UsbUJBQW9CLEFBQ3BCLDBCQUE0QixDQUM3QixDQUNGIiwiZmlsZSI6ImVra28tbGlnaHRib3guY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmVra28tbGlnaHRib3gge1xuICBkaXNwbGF5OiBmbGV4ICFpbXBvcnRhbnQ7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICBwYWRkaW5nLXJpZ2h0OiAwcHghaW1wb3J0YW50O1xufVxuLmVra28tbGlnaHRib3gtY29udGFpbmVyIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xufVxuLmVra28tbGlnaHRib3gtY29udGFpbmVyID4gZGl2LmVra28tbGlnaHRib3gtaXRlbSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAwO1xuICBsZWZ0OiAwO1xuICBib3R0b206IDA7XG4gIHJpZ2h0OiAwO1xuICB3aWR0aDogMTAwJTtcbn1cbi5la2tvLWxpZ2h0Ym94IGlmcmFtZSB7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDEwMCU7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSB7XG4gIHotaW5kZXg6IDEwMDtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDA7XG4gIGxlZnQ6IDA7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDEwMCU7XG4gIGRpc3BsYXk6IGZsZXg7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSBhIHtcbiAgZmxleDogMTtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgb3BhY2l0eTogMDtcbiAgdHJhbnNpdGlvbjogb3BhY2l0eSAwLjVzO1xuICBjb2xvcjogI2ZmZjtcbiAgZm9udC1zaXplOiAzMHB4O1xuICB6LWluZGV4OiAxMDA7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSBhID4gKiB7XG4gIGZsZXgtZ3JvdzogMTtcbn1cbi5la2tvLWxpZ2h0Ym94LW5hdi1vdmVybGF5IGEgPiAqOmZvY3VzIHtcbiAgb3V0bGluZTogbm9uZTtcbn1cbi5la2tvLWxpZ2h0Ym94LW5hdi1vdmVybGF5IGEgc3BhbiB7XG4gIHBhZGRpbmc6IDAgMzBweDtcbn1cbi5la2tvLWxpZ2h0Ym94LW5hdi1vdmVybGF5IGE6bGFzdC1jaGlsZCBzcGFuIHtcbiAgdGV4dC1hbGlnbjogcmlnaHQ7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSBhOmhvdmVyIHtcbiAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xufVxuLmVra28tbGlnaHRib3gtbmF2LW92ZXJsYXkgYTpmb2N1cyB7XG4gIG91dGxpbmU6IG5vbmU7XG59XG4uZWtrby1saWdodGJveC1uYXYtb3ZlcmxheSBhLmRpc2FibGVkIHtcbiAgY3Vyc29yOiBkZWZhdWx0O1xuICB2aXNpYmlsaXR5OiBoaWRkZW47XG59XG4uZWtrby1saWdodGJveCBhOmhvdmVyIHtcbiAgb3BhY2l0eTogMTtcbiAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xufVxuLmVra28tbGlnaHRib3ggLm1vZGFsLWRpYWxvZyB7XG4gIGRpc3BsYXk6IG5vbmU7XG59XG4uZWtrby1saWdodGJveCAubW9kYWwtZm9vdGVyIHtcbiAgdGV4dC1hbGlnbjogbGVmdDtcbn1cbi5la2tvLWxpZ2h0Ym94LWxvYWRlciB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAwO1xuICBsZWZ0OiAwO1xuICBib3R0b206IDA7XG4gIHJpZ2h0OiAwO1xuICB3aWR0aDogMTAwJTtcbiAgZGlzcGxheTogZmxleDtcbiAgLyogZXN0YWJsaXNoIGZsZXggY29udGFpbmVyICovXG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIC8qIG1ha2UgbWFpbiBheGlzIHZlcnRpY2FsICovXG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICAvKiBjZW50ZXIgaXRlbXMgdmVydGljYWxseSwgaW4gdGhpcyBjYXNlICovXG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG59XG4uZWtrby1saWdodGJveC1sb2FkZXIgPiBkaXYge1xuICB3aWR0aDogNDBweDtcbiAgaGVpZ2h0OiA0MHB4O1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbn1cbi5la2tvLWxpZ2h0Ym94LWxvYWRlciA+IGRpdiA+IGRpdiB7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDEwMCU7XG4gIGJvcmRlci1yYWRpdXM6IDUwJTtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbiAgb3BhY2l0eTogMC42O1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogMDtcbiAgbGVmdDogMDtcbiAgYW5pbWF0aW9uOiBzay1ib3VuY2UgMnMgaW5maW5pdGUgZWFzZS1pbi1vdXQ7XG59XG4uZWtrby1saWdodGJveC1sb2FkZXIgPiBkaXYgPiBkaXY6bGFzdC1jaGlsZCB7XG4gIGFuaW1hdGlvbi1kZWxheTogLTFzO1xufVxuLm1vZGFsLWRpYWxvZyAuZWtrby1saWdodGJveC1sb2FkZXIgPiBkaXYgPiBkaXYge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjMzMzO1xufVxuQC13ZWJraXQta2V5ZnJhbWVzIHNrLWJvdW5jZSB7XG4gIDAlLFxuICAxMDAlIHtcbiAgICAtd2Via2l0LXRyYW5zZm9ybTogc2NhbGUoMCk7XG4gIH1cbiAgNTAlIHtcbiAgICAtd2Via2l0LXRyYW5zZm9ybTogc2NhbGUoMSk7XG4gIH1cbn1cbkBrZXlmcmFtZXMgc2stYm91bmNlIHtcbiAgMCUsXG4gIDEwMCUge1xuICAgIHRyYW5zZm9ybTogc2NhbGUoMCk7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHNjYWxlKDApO1xuICB9XG4gIDUwJSB7XG4gICAgdHJhbnNmb3JtOiBzY2FsZSgxKTtcbiAgICAtd2Via2l0LXRyYW5zZm9ybTogc2NhbGUoMSk7XG4gIH1cbn1cbiJdfQ== */
</style>
@endpush
@section('content')


    <div class="container" style="margin-top: 150px">
        <div class="row">
            @for($i = 1; $i <= 27; $i++)
                <div class="col-md-3 col-sm-6 lighterbox">
                    <a data-toggle="lightbox" data-gallery="1" href="{{ url('/gallery/'.$i.'-min.jpg') }}">
                        <div class="profile-card profile-card-meta_center">
                            <figure>
                                <img class="img-responsive" src="{{ url('/gallery/'.$i.'-min.jpg') }}" style="height: 100%"
                                     alt="{{ $i }}.jpg">
                            </figure>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>


@endsection

@push('scripts')
<script>
    /**
     * Created by Asus on 9/24/2018.
     */
    +function (a) {
        "use strict";
        function b(a, b) {
            if (!(a instanceof b))throw new TypeError("Cannot call a class as a function")
        }

        var c = function () {
            function a(a, b) {
                for (var c = 0; c < b.length; c++) {
                    var d = b[c];
                    d.enumerable = d.enumerable || !1, d.configurable = !0, "value" in d && (d.writable = !0), Object.defineProperty(a, d.key, d)
                }
            }

            return function (b, c, d) {
                return c && a(b.prototype, c), d && a(b, d), b
            }
        }();
        (function (a) {
            var d = "ekkoLightbox", e = a.fn[d], f = {
                title: "",
                footer: "",
                maxWidth: 9999,
                maxHeight: 9999,
                showArrows: !0,
                wrapping: !0,
                type: null,
                alwaysShowClose: !1,
                loadingMessage: '<div class="ekko-lightbox-loader"><div><div></div><div></div></div></div>',
                leftArrow: "<span>&#10094;</span>",
                rightArrow: "<span>&#10095;</span>",
                strings: {
                    close: "Close",
                    fail: "Failed to load image:",
                    type: "Could not detect remote target type. Force the type using data-type"
                },
                doc: document,
                onShow: function () {
                },
                onShown: function () {
                },
                onHide: function () {
                },
                onHidden: function () {
                },
                onNavigate: function () {
                },
                onContentLoaded: function () {
                }
            }, g = function () {
                function d(c, e) {
                    var g = this;
                    b(this, d), this._config = a.extend({}, f, e), this._$modalArrows = null, this._galleryIndex = 0, this._galleryName = null, this._padding = null, this._border = null, this._titleIsShown = !1, this._footerIsShown = !1, this._wantedWidth = 0, this._wantedHeight = 0, this._touchstartX = 0, this._touchendX = 0, this._modalId = "ekkoLightbox-" + Math.floor(1e3 * Math.random() + 1), this._$element = c instanceof jQuery ? c : a(c), this._isBootstrap3 = 3 == a.fn.modal.Constructor.VERSION[0];
                    var h = '<h4 class="modal-title">' + (this._config.title || "&nbsp;") + "</h4>",
                        i = '<button type="button" class="close" data-dismiss="modal" aria-label="' + this._config.strings.close + '"><span aria-hidden="true">&times;</span></button>',
                        j = '<div class="modal-header' + (this._config.title || this._config.alwaysShowClose ? "" : " hide") + '">' + (this._isBootstrap3 ? i + h : h + i) + "</div>",
                        k = '<div class="modal-footer' + (this._config.footer ? "" : " hide") + '">' + (this._config.footer || "&nbsp;") + "</div>",
                        l = '<div class="modal-body"><div class="ekko-lightbox-container"><div class="ekko-lightbox-item fade in show"></div><div class="ekko-lightbox-item fade"></div></div></div>',
                        m = '<div class="modal-dialog" role="document"><div class="modal-content">' + j + l + k + "</div></div>";
                    a(this._config.doc.body).append('<div id="' + this._modalId + '" class="ekko-lightbox modal fade" tabindex="-1" tabindex="-1" role="dialog" aria-hidden="true">' + m + "</div>"), this._$modal = a("#" + this._modalId, this._config.doc), this._$modalDialog = this._$modal.find(".modal-dialog").first(), this._$modalContent = this._$modal.find(".modal-content").first(), this._$modalBody = this._$modal.find(".modal-body").first(), this._$modalHeader = this._$modal.find(".modal-header").first(), this._$modalFooter = this._$modal.find(".modal-footer").first(), this._$lightboxContainer = this._$modalBody.find(".ekko-lightbox-container").first(), this._$lightboxBodyOne = this._$lightboxContainer.find("> div:first-child").first(), this._$lightboxBodyTwo = this._$lightboxContainer.find("> div:last-child").first(), this._border = this._calculateBorders(), this._padding = this._calculatePadding(), this._galleryName = this._$element.data("gallery"), this._galleryName && (this._$galleryItems = a(document.body).find('*[data-gallery="' + this._galleryName + '"]'), this._galleryIndex = this._$galleryItems.index(this._$element), a(document).on("keydown.ekkoLightbox", this._navigationalBinder.bind(this)), this._config.showArrows && this._$galleryItems.length > 1 && (this._$lightboxContainer.append('<div class="ekko-lightbox-nav-overlay"><a href="#">' + this._config.leftArrow + '</a><a href="#">' + this._config.rightArrow + "</a></div>"), this._$modalArrows = this._$lightboxContainer.find("div.ekko-lightbox-nav-overlay").first(), this._$lightboxContainer.on("click", "a:first-child", function (a) {
                        return a.preventDefault(), g.navigateLeft()
                    }), this._$lightboxContainer.on("click", "a:last-child", function (a) {
                        return a.preventDefault(), g.navigateRight()
                    }), this.updateNavigation())), this._$modal.on("show.bs.modal", this._config.onShow.bind(this)).on("shown.bs.modal", function () {
                        return g._toggleLoading(!0), g._handle(), g._config.onShown.call(g)
                    }).on("hide.bs.modal", this._config.onHide.bind(this)).on("hidden.bs.modal", function () {
                        return g._galleryName && (a(document).off("keydown.ekkoLightbox"), a(window).off("resize.ekkoLightbox")), g._$modal.remove(), g._config.onHidden.call(g)
                    }).modal(this._config), a(window).on("resize.ekkoLightbox", function () {
                        g._resize(g._wantedWidth, g._wantedHeight)
                    }), this._$lightboxContainer.on("touchstart", function () {
                        g._touchstartX = event.changedTouches[0].screenX
                    }).on("touchend", function () {
                        g._touchendX = event.changedTouches[0].screenX, g._swipeGesure()
                    })
                }

                return c(d, null, [{
                    key: "Default", get: function () {
                        return f
                    }
                }]), c(d, [{
                    key: "element", value: function () {
                        return this._$element
                    }
                }, {
                    key: "modal", value: function () {
                        return this._$modal
                    }
                }, {
                    key: "navigateTo", value: function (b) {
                        return b < 0 || b > this._$galleryItems.length - 1 ? this : (this._galleryIndex = b, this.updateNavigation(), this._$element = a(this._$galleryItems.get(this._galleryIndex)), void this._handle())
                    }
                }, {
                    key: "navigateLeft", value: function () {
                        if (this._$galleryItems && 1 !== this._$galleryItems.length) {
                            if (0 === this._galleryIndex) {
                                if (!this._config.wrapping)return;
                                this._galleryIndex = this._$galleryItems.length - 1
                            } else this._galleryIndex--;
                            return this._config.onNavigate.call(this, "left", this._galleryIndex), this.navigateTo(this._galleryIndex)
                        }
                    }
                }, {
                    key: "navigateRight", value: function () {
                        if (this._$galleryItems && 1 !== this._$galleryItems.length) {
                            if (this._galleryIndex === this._$galleryItems.length - 1) {
                                if (!this._config.wrapping)return;
                                this._galleryIndex = 0
                            } else this._galleryIndex++;
                            return this._config.onNavigate.call(this, "right", this._galleryIndex), this.navigateTo(this._galleryIndex)
                        }
                    }
                }, {
                    key: "updateNavigation", value: function () {
                        if (!this._config.wrapping) {
                            var a = this._$lightboxContainer.find("div.ekko-lightbox-nav-overlay");
                            0 === this._galleryIndex ? a.find("a:first-child").addClass("disabled") : a.find("a:first-child").removeClass("disabled"), this._galleryIndex === this._$galleryItems.length - 1 ? a.find("a:last-child").addClass("disabled") : a.find("a:last-child").removeClass("disabled")
                        }
                    }
                }, {
                    key: "close", value: function () {
                        return this._$modal.modal("hide")
                    }
                }, {
                    key: "_navigationalBinder", value: function (a) {
                        return a = a || window.event, 39 === a.keyCode ? this.navigateRight() : 37 === a.keyCode ? this.navigateLeft() : void 0
                    }
                }, {
                    key: "_detectRemoteType", value: function (a, b) {
                        return b = b || !1, !b && this._isImage(a) && (b = "image"), !b && this._getYoutubeId(a) && (b = "youtube"), !b && this._getVimeoId(a) && (b = "vimeo"), !b && this._getInstagramId(a) && (b = "instagram"), ("audio" == b || "video" == b || !b && this._isMedia(a)) && (b = "media"), (!b || ["image", "youtube", "vimeo", "instagram", "media", "url"].indexOf(b) < 0) && (b = "url"), b
                    }
                }, {
                    key: "_getRemoteContentType", value: function (b) {
                        var c = a.ajax({type: "HEAD", url: b, async: !1}), d = c.getResponseHeader("Content-Type");
                        return d
                    }
                }, {
                    key: "_isImage", value: function (a) {
                        return a && a.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)
                    }
                }, {
                    key: "_isMedia", value: function (a) {
                        return a && a.match(/(\.(mp3|mp4|ogg|webm|wav)((\?|#).*)?$)/i)
                    }
                }, {
                    key: "_containerToUse", value: function () {
                        var a = this, b = this._$lightboxBodyTwo, c = this._$lightboxBodyOne;
                        return this._$lightboxBodyTwo.hasClass("in") && (b = this._$lightboxBodyOne, c = this._$lightboxBodyTwo), c.removeClass("in show"), setTimeout(function () {
                            a._$lightboxBodyTwo.hasClass("in") || a._$lightboxBodyTwo.empty(), a._$lightboxBodyOne.hasClass("in") || a._$lightboxBodyOne.empty()
                        }, 500), b.addClass("in show"), b
                    }
                }, {
                    key: "_handle", value: function () {
                        var a = this._containerToUse();
                        this._updateTitleAndFooter();
                        var b = this._$element.attr("data-remote") || this._$element.attr("href"),
                            c = this._detectRemoteType(b, this._$element.attr("data-type") || !1);
                        if (["image", "youtube", "vimeo", "instagram", "media", "url"].indexOf(c) < 0)return this._error(this._config.strings.type);
                        switch (c) {
                            case"image":
                                this._preloadImage(b, a), this._preloadImageByIndex(this._galleryIndex, 3);
                                break;
                            case"youtube":
                                this._showYoutubeVideo(b, a);
                                break;
                            case"vimeo":
                                this._showVimeoVideo(this._getVimeoId(b), a);
                                break;
                            case"instagram":
                                this._showInstagramVideo(this._getInstagramId(b), a);
                                break;
                            case"media":
                                this._showHtml5Media(b, a);
                                break;
                            default:
                                this._loadRemoteContent(b, a)
                        }
                        return this
                    }
                }, {
                    key: "_getYoutubeId", value: function (a) {
                        if (!a)return !1;
                        var b = a.match(/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/);
                        return !(!b || 11 !== b[2].length) && b[2]
                    }
                }, {
                    key: "_getVimeoId", value: function (a) {
                        return !!(a && a.indexOf("vimeo") > 0) && a
                    }
                }, {
                    key: "_getInstagramId", value: function (a) {
                        return !!(a && a.indexOf("instagram") > 0) && a
                    }
                }, {
                    key: "_toggleLoading", value: function (b) {
                        return b = b || !1, b ? (this._$modalDialog.css("display", "none"), this._$modal.removeClass("in show"), a(".modal-backdrop").append(this._config.loadingMessage)) : (this._$modalDialog.css("display", "block"), this._$modal.addClass("in show"), a(".modal-backdrop").find(".ekko-lightbox-loader").remove()), this
                    }
                }, {
                    key: "_calculateBorders", value: function () {
                        return {
                            top: this._totalCssByAttribute("border-top-width"),
                            right: this._totalCssByAttribute("border-right-width"),
                            bottom: this._totalCssByAttribute("border-bottom-width"),
                            left: this._totalCssByAttribute("border-left-width")
                        }
                    }
                }, {
                    key: "_calculatePadding", value: function () {
                        return {
                            top: this._totalCssByAttribute("padding-top"),
                            right: this._totalCssByAttribute("padding-right"),
                            bottom: this._totalCssByAttribute("padding-bottom"),
                            left: this._totalCssByAttribute("padding-left")
                        }
                    }
                }, {
                    key: "_totalCssByAttribute", value: function (a) {
                        return parseInt(this._$modalDialog.css(a), 10) + parseInt(this._$modalContent.css(a), 10) + parseInt(this._$modalBody.css(a), 10)
                    }
                }, {
                    key: "_updateTitleAndFooter", value: function () {
                        var a = this._$element.data("title") || "", b = this._$element.data("footer") || "";
                        return this._titleIsShown = !1, a || this._config.alwaysShowClose ? (this._titleIsShown = !0, this._$modalHeader.css("display", "").find(".modal-title").html(a || "&nbsp;")) : this._$modalHeader.css("display", "none"), this._footerIsShown = !1, b ? (this._footerIsShown = !0, this._$modalFooter.css("display", "").html(b)) : this._$modalFooter.css("display", "none"), this
                    }
                }, {
                    key: "_showYoutubeVideo", value: function (a, b) {
                        var c = this._getYoutubeId(a), d = a.indexOf("&") > 0 ? a.substr(a.indexOf("&")) : "",
                            e = this._$element.data("width") || 560,
                            f = this._$element.data("height") || e / (560 / 315);
                        return this._showVideoIframe("//www.youtube.com/embed/" + c + "?badge=0&autoplay=1&html5=1" + d, e, f, b)
                    }
                }, {
                    key: "_showVimeoVideo", value: function (a, b) {
                        var c = this._$element.data("width") || 500,
                            d = this._$element.data("height") || c / (560 / 315);
                        return this._showVideoIframe(a + "?autoplay=1", c, d, b)
                    }
                }, {
                    key: "_showInstagramVideo", value: function (a, b) {
                        var c = this._$element.data("width") || 612, d = c + 80;
                        return a = "/" !== a.substr(-1) ? a + "/" : a, b.html('<iframe width="' + c + '" height="' + d + '" src="' + a + 'embed/" frameborder="0" allowfullscreen></iframe>'), this._resize(c, d), this._config.onContentLoaded.call(this), this._$modalArrows && this._$modalArrows.css("display", "none"), this._toggleLoading(!1), this
                    }
                }, {
                    key: "_showVideoIframe", value: function (a, b, c, d) {
                        return c = c || b, d.html('<div class="embed-responsive embed-responsive-16by9"><iframe width="' + b + '" height="' + c + '" src="' + a + '" frameborder="0" allowfullscreen class="embed-responsive-item"></iframe></div>'), this._resize(b, c), this._config.onContentLoaded.call(this), this._$modalArrows && this._$modalArrows.css("display", "none"), this._toggleLoading(!1), this
                    }
                }, {
                    key: "_showHtml5Media", value: function (a, b) {
                        var c = this._getRemoteContentType(a);
                        if (!c)return this._error(this._config.strings.type);
                        var d = "";
                        d = c.indexOf("audio") > 0 ? "audio" : "video";
                        var e = this._$element.data("width") || 560,
                            f = this._$element.data("height") || e / (560 / 315);
                        return b.html('<div class="embed-responsive embed-responsive-16by9"><' + d + ' width="' + e + '" height="' + f + '" preload="auto" autoplay controls class="embed-responsive-item"><source src="' + a + '" type="' + c + '">' + this._config.strings.type + "</" + d + "></div>"), this._resize(e, f), this._config.onContentLoaded.call(this), this._$modalArrows && this._$modalArrows.css("display", "none"), this._toggleLoading(!1), this
                    }
                }, {
                    key: "_loadRemoteContent", value: function (b, c) {
                        var d = this, e = this._$element.data("width") || 560, f = this._$element.data("height") || 560,
                            g = this._$element.data("disableExternalCheck") || !1;
                        return this._toggleLoading(!1), g || this._isExternal(b) ? (c.html('<iframe src="' + b + '" frameborder="0" allowfullscreen></iframe>'), this._config.onContentLoaded.call(this)) : c.load(b, a.proxy(function () {
                            return d._$element.trigger("loaded.bs.modal")
                        })), this._$modalArrows && this._$modalArrows.css("display", "none"), this._resize(e, f), this
                    }
                }, {
                    key: "_isExternal", value: function (a) {
                        var b = a.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);
                        return "string" == typeof b[1] && b[1].length > 0 && b[1].toLowerCase() !== location.protocol || "string" == typeof b[2] && b[2].length > 0 && b[2].replace(new RegExp(":(" + {
                                    "http:": 80,
                                    "https:": 443
                                }[location.protocol] + ")?$"), "") !== location.host
                    }
                }, {
                    key: "_error", value: function (a) {
                        return console.error(a), this._containerToUse().html(a), this._resize(300, 300), this
                    }
                }, {
                    key: "_preloadImageByIndex", value: function (b, c) {
                        if (this._$galleryItems) {
                            var d = a(this._$galleryItems.get(b), !1);
                            if ("undefined" != typeof d) {
                                var e = d.attr("data-remote") || d.attr("href");
                                return ("image" === d.attr("data-type") || this._isImage(e)) && this._preloadImage(e, !1), c > 0 ? this._preloadImageByIndex(b + 1, c - 1) : void 0
                            }
                        }
                    }
                }, {
                    key: "_preloadImage", value: function (b, c) {
                        var d = this;
                        c = c || !1;
                        var e = new Image;
                        return c && !function () {
                            var f = setTimeout(function () {
                                c.append(d._config.loadingMessage)
                            }, 200);
                            e.onload = function () {
                                f && clearTimeout(f), f = null;
                                var b = a("<img />");
                                return b.attr("src", e.src), b.addClass("img-fluid"), b.css("width", "100%"), c.html(b), d._$modalArrows && d._$modalArrows.css("display", ""), d._resize(e.width, e.height), d._toggleLoading(!1), d._config.onContentLoaded.call(d)
                            }, e.onerror = function () {
                                return d._toggleLoading(!1), d._error(d._config.strings.fail + ("  " + b))
                            }
                        }(), e.src = b, e
                    }
                }, {
                    key: "_swipeGesure", value: function () {
                        return this._touchendX < this._touchstartX ? this.navigateRight() : this._touchendX > this._touchstartX ? this.navigateLeft() : void 0
                    }
                }, {
                    key: "_resize", value: function (b, c) {
                        c = c || b, this._wantedWidth = b, this._wantedHeight = c;
                        var d = b / c,
                            e = this._padding.left + this._padding.right + this._border.left + this._border.right,
                            f = this._config.doc.body.clientWidth > 575 ? 20 : 0,
                            g = this._config.doc.body.clientWidth > 575 ? 0 : 20,
                            h = Math.min(b + e, this._config.doc.body.clientWidth - f, this._config.maxWidth);
                        b + e > h ? (c = (h - e - g) / d, b = h) : b += e;
                        var i = 0, j = 0;
                        this._footerIsShown && (j = this._$modalFooter.outerHeight(!0) || 55), this._titleIsShown && (i = this._$modalHeader.outerHeight(!0) || 67);
                        var k = this._padding.top + this._padding.bottom + this._border.bottom + this._border.top,
                            l = parseFloat(this._$modalDialog.css("margin-top")) + parseFloat(this._$modalDialog.css("margin-bottom")),
                            m = Math.min(c, a(window).height() - k - l - i - j, this._config.maxHeight - k - i - j);
                        c > m && (b = Math.ceil(m * d) + e), this._$lightboxContainer.css("height", m), this._$modalDialog.css("flex", 1).css("maxWidth", b);
                        var n = this._$modal.data("bs.modal");
                        if (n)try {
                            n._handleUpdate()
                        } catch (o) {
                            n.handleUpdate()
                        }
                        return this
                    }
                }], [{
                    key: "_jQueryInterface", value: function (b) {
                        var c = this;
                        return b = b || {}, this.each(function () {
                            var e = a(c), f = a.extend({}, d.Default, e.data(), "object" == typeof b && b);
                            new d(c, f)
                        })
                    }
                }]), d
            }();
            return a.fn[d] = g._jQueryInterface, a.fn[d].Constructor = g, a.fn[d].noConflict = function () {
                return a.fn[d] = e, g._jQueryInterface
            }, g
        })(jQuery)
    }(jQuery);
    //# sourceMappingURL=ekko-lightbox.min.js.map
</script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

</script>
@endpush