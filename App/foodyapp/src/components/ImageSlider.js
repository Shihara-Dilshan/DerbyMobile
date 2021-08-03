import React, { Component } from "react";
import { StyleSheet, Text, View } from "react-native";
 
import { SliderBox } from "react-native-image-slider-box";
import * as Animatable from 'react-native-animatable';
 
export default class ImageSlider extends Component {
  constructor(props) {
    super(props);
    this.state = {
      images: [
        require('./../assets/images/slider/image4.jpg'),
        require('./../assets/images/slider/image1.jpg'),
        require('./../assets/images/slider/image3.jpg'),
        require('./../assets/images/slider/image5.jpg'),
        require('./../assets/images/slider/image2.jpg'),
      ]
    };
  }
 
  render() {
    return (
        <Animatable.View animation="bounceInUp" delay={500} duration={2000}>
      <View style={styles.container}>
        <SliderBox
          sliderBoxHeight={200}
          dotColor="green"
          inactiveDotColor="white"
          autoplay={true}
          circleLoop={true}
          images={this.state.images}
          onCurrentImagePressed={index =>
            console.warn(`image ${index} pressed`)
          }
        />
      </View>
      </Animatable.View>
    );
  }
}
 
const styles = StyleSheet.create({
  container: {
    flex: 1
  }
});