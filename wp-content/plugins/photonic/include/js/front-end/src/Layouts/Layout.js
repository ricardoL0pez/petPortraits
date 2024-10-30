import {JustifiedGrid} from "./Justified";
import {Mosaic} from "./Mosaic";
import {Masonry} from "./Masonry";
import {MasonryHorizontal} from "./MasonryHorizontal";
import * as Slider from "./Slider";

export const initializeLayouts = (lightbox) => {
	JustifiedGrid(false, false, null, lightbox);
	Mosaic(false, false);
	Masonry(false, false);
	MasonryHorizontal(false, false);

	Slider.initializeSliders();

	window.addEventListener('resize', () => {
		JustifiedGrid(true, false, '.photonic-random-layout.sizes-missing');
		Mosaic(true, false);
		Masonry(true, false);
		MasonryHorizontal(true, false);
	});
};
